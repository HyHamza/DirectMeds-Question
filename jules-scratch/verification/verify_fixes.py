import re
from playwright.sync_api import sync_playwright, Page, expect

def run(playwright):
    browser = playwright.chromium.launch(headless=True)
    context = browser.new_context()
    page = context.new_page()

    try:
        test_questionnaire_flow_and_results(page)
    finally:
        context.close()
        browser.close()

def test_questionnaire_flow_and_results(page: Page):
    """
    This test verifies two fixes:
    1. The redirection from questionnaire-5b now works correctly.
    2. The goal weight on the results page is displayed correctly based on user input.
    """

    # Start at the beginning of the questionnaire
    page.goto("http://localhost/wordpress/questionnaire-1/")

    # --- Fill out the questionnaire ---

    # Page 1: Gender
    page.get_by_label("Female").click() # This has onclick submit

    # Page 2: DOB
    page.wait_for_url("**/questionnaire-2/")
    page.get_by_label("Month").select_option("01")
    page.get_by_label("Day").select_option("15")
    page.get_by_label("Year").select_option("1990")
    page.get_by_role("button", name="Continue").click()

    # Page 3: Health Conditions
    page.wait_for_url("**/questionnaire-3/")
    page.get_by_label("None of the above").check()
    page.get_by_role("button", name="Continue").click()

    # Page 4: Disqualifying Conditions
    page.wait_for_url("**/questionnaire-4/")
    page.get_by_label("None of the above").check()
    page.get_by_role("button", name="Continue").click()

    # Page 5: Thyroid Cancer
    page.wait_for_url("**/questionnaire-5/")
    page.get_by_role("button", name="No").click()

    # Page 5b: Current Prescription (This is where the first bug was)
    page.wait_for_url("**/questionnaire-5b/")
    page.get_by_label("No").click() # This has onclick submit

    # Page 6: Height/Weight
    page.wait_for_url("**/questionnaire-6/")
    expect(page).to_have_url(re.compile(r".*/questionnaire-6/")) # Verify redirection from 5b
    page.locator('input[name="intake_height_ft"]').fill("5")
    page.locator('input[name="intake_height_in"]').fill("5")
    page.locator('input[name="intake_weight"]').fill("150")
    page.get_by_role("button", name="Continue").click()

    # Page 7: Diabetic Retinopathy
    page.wait_for_url("**/questionnaire-7/")
    page.get_by_role("button", name="No").click()

    # Page 8: Endocrine Neoplasia
    page.wait_for_url("**/questionnaire-8/")
    page.get_by_role("button", name="No").click()

    # Page 9: GI Disorder
    page.wait_for_url("**/questionnaire-9/")
    page.get_by_role("button", name="No").click()

    # Page 10: Pregnant
    page.wait_for_url("**/questionnaire-10/")
    page.get_by_role("button", name="No").click()

    # Page 11: Medications
    page.wait_for_url("**/questionnaire-11/")
    page.get_by_label("None of the above").check()
    page.get_by_role("button", name="Continue").click()

    # Page 12: Allergies
    page.wait_for_url("**/questionnaire-12/")
    page.get_by_role("button", name="No").click()

    # Page 13: Terms
    page.wait_for_url("**/questionnaire-13/")
    page.locator('input[name="intake_terms_agree"]').check()
    page.get_by_role("button", name="Continue").click()

    # Page 14: Goal Weight (This is for the second bug)
    page.wait_for_url("**/questionnaire-14/")
    goal_weight_input = "130"
    page.locator('input[name="intake_goal_weight"]').fill(goal_weight_input)
    page.get_by_role("button", name="Continue").click()

    # Calculating page
    page.wait_for_url("**/calculating/")

    # Results page
    page.wait_for_url("**/results/", timeout=10000) # Give it time to "calculate"
    expect(page).to_have_title("CONGRATULATIONS!")

    # --- Verify the results page ---

    # Using a more robust locator strategy
    current_weight_text = page.locator(".stats-item", has_text="Current Wght").locator("h1").inner_text()
    expect(current_weight_text).to_contain("150")

    goal_weight_text = page.locator(".stats-item", has_text="Goal Wght").locator("h1").inner_text()
    expect(goal_weight_text).to_contain(goal_weight_input)

    weight_to_lose_text = page.locator(".stats-item", has_text="You're all set to lose").locator("h1").inner_text()
    expected_loss = 150 - int(goal_weight_input)
    expect(weight_to_lose_text).to_contain(str(expected_loss))

    # Screenshot for visual verification
    page.screenshot(path="jules-scratch/verification/verification.png")

if __name__ == "__main__":
    with sync_playwright() as p:
        run(p)