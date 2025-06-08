@local_helloworld
Feature: Say Hello
  In order to verify that the plugin is working
  As a user
  I should see the "Hello World" text on the index page

  Scenario: View hello world page
    Given I log in as "admin"
    And I am on "local/helloworld/index.php"
    Then I should see "Hello World"
