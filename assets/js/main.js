jQuery(document).ready(function($) {
    const container = $('#card-master');
    if (container.length === 0) {
        return;
    }

    const questionnaireId = container.data('questionnaire-id');
    const firstQuestionId = container.data('first-question-id');
    let questionNumber = 0;

    loadQuestion(firstQuestionId);

    function loadQuestion(questionId) {
        if (questionId === 'end' || !questionId) {
            container.html(`
                <div class="card step">
                    <div class="card-body text-center">
                        <h1>Thank you!</h1>
                        <p>You have completed the questionnaire.</p>
                    </div>
                </div>
            `);
            return;
        }

        $.ajax({
            url: questionnaire_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'get_question_data',
                question_id: questionId,
            }
        }).done(function(response) {
            if (response.success) {
                questionNumber++;
                renderQuestion(response.data, questionNumber);
            } else {
                container.html('<p>Error loading question.</p>');
            }
        }).fail(function() {
            container.html('<p>Error loading question.</p>');
        });
    }

    function renderQuestion(data, currentStep) {
        const totalSteps = parseInt(data.total_questions, 10) || currentStep;
        const progress = totalSteps > 0 ? ((currentStep -1) / totalSteps) * 100 : 0;

        let answersHtml = '<p>No answers found for this question.</p>';
        if (data.answers && data.answers.length > 0) {
            answersHtml = '<div class="radioselection d-flex">';
            data.answers.forEach(answer => {
                // Basic icon mapping for the first question
                let iconHtml = '';
                if (data.question.id == 1 || (data.question.question_text || '').toLowerCase().includes('gender')) {
                     if ((answer.answer_text || '').toLowerCase() === 'male') {
                        iconHtml = '<i class="bi bi-gender-male"></i><br>';
                    } else if ((answer.answer_text || '').toLowerCase() === 'female') {
                        iconHtml = '<i class="bi bi-gender-female"></i><br>';
                    }
                }

                answersHtml += `
                    <input type="radio" class="col-sm-6 answer-radio" name="answer_${data.question.id}" id="answer_${answer.id}" value="${answer.id}">
                    <label for="answer_${answer.id}" class="col">
                        ${iconHtml}
                        ${answer.answer_text}
                    </label>
                `;
            });
            answersHtml += '</div>';
        }

        const questionHtml = `
            <div class="card step" data-question-id="${data.question.id}">
                <div class="progress-container">
                    <p class="progressnotice">Your Progress</p>
                    <div class="progress" role="progressbar" aria-valuenow="${progress}" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: ${progress}%"></div>
                    </div>
                </div>
                <div class="card-body">
                    <h1>${data.question.question_text}</h1>
                    ${answersHtml}
                </div>
            </div>
        `;
        container.html(questionHtml);
    }

    container.on('click', '.answer-radio', function() {
        const radio = $(this);
        const questionId = radio.closest('.card.step').data('question-id');
        const answerId = radio.val();

        // Add a small delay to allow the user to see their selection
        setTimeout(function() {
            $.ajax({
                url: questionnaire_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'handle_answer_submission',
                    question_id: questionId,
                    answer_id: answerId,
                }
            }).done(function(response) {
                if (response.success) {
                    loadQuestion(response.data.next_question_id);
                } else {
                    alert('Error submitting answer.');
                }
            }).fail(function() {
                alert('Error submitting answer.');
            });
        }, 300);
    });
});