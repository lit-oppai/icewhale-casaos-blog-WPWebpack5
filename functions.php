<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

$loginPageSetup = new LoginPageSetup;

$cleanUpSetup = new CleanUpSetup;

$styleAndScriptSetup = new StyleAndScriptSetup;

$feedSetup = new FeedSetup;

$attachmentsSetup = new AttachmentsSetup;

$redirectsSetup = new RedirectsSetup;

// $searchSetup = new SearchSetup;

// $commentsSetup = new CommentsSetup;

$gutenbergSetup = new GutenbergSetup;

$menuSetup = new MenuSetup;

$excerptSetup = new ExcerptSetup;

$mediaSetup = new MediaSetup;

// $customPostTypeSetup = new CustomPostTypeSetup;

$taxonomySetup = new TaxonomySetup;

$contentSetup = new ContentSetup;

$testsSetup = new TestsSetup;

$usersSetup = new UsersSetup;

$translationSetup = new TranslationSetup;





function get_category_count($name)
{
  // 函数体
  $categories = get_categories(array(
    'type' => "post"
  ));
  foreach ($categories as $category) {
    if ($category->slug == $name || $category->name == $name) {
      return print_r($category->count);
    }
  }
}
