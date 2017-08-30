<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "podcast".
 *
 * Auto generated 06-08-2017 11:57
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Podcast for TYPO3',
  'description' => 'The new Podcast extension for Typo3 makes publishing and managing Podcasts a breeze. Out of the box support for HTML5 video and audio, RealURL support, automatic feed publishing and much more. For more infos, see http://noelboss.github.com/Podcast Bug reports https://github.com/noelboss/Podcast/issues',
  'category' => 'plugin',
  'version' => '0.6.0',
  'state' => 'Alpha',
  'uploadfolder' => 1,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'author' => 'Noel Bossart',
  'author_email' => 'n dot company at me dot com',
  'author_company' => 'noelboss.ch',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '4.5-7.6.21',
      'extbase' => '1.3',
      'fluid' => '1.3',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

