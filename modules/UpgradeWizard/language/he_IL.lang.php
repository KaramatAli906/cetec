<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'המודולים הבאים הותקנו:',
	'DESC_MODULES_QUEUED'						=> 'המודולים הבאים מוכנים להתקנה:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'לא ניתן לקבוע קבוצה',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'לא ניתן לקבוע בעלים',
	'ERR_UW_CONFIG_WRITE'						=> 'שגיאה בהעלאת config.php עם מידע של גרסה חדשה.',
	'ERR_UW_CONFIG'								=> 'אנא שנה את ההרשאות של הקובץ config.php כך שיהיה ניתן לכתוב בו וטען דף זה מחדש.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'לא ניתן לכתוב לספריה',
	'ERR_UW_FILE_NOT_COPIED'					=> 'קובץ לא הועתק',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem removing package',
	'ERR_UW_FILE_NOT_READABLE'					=> 'לא ניתן לקרוא את הקובץ.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'לא ניתן להעביר את הקובץ או לכתוב בו',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Flavor:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM System Flavor:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'לא ניתן ליצור את upgradeWizard.log או לכתוב בו. אנא תקן את ההרשאות בספריית SugarCRM שלך.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload set to a value higher than 1.  Please change this in your php.ini and restart the web server.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM requires MySQL version 4.1.2 or newer.  Found:',
	'ERR_UW_OCI8_VERSION'				        => 'Your version of Oracle is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported Oracle Versions. Current version:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'אנא ציין קובץ ונסה שוב!',
	'ERR_UW_NO_FILES'							=> 'קרתה שגיאה, לא נמצאו קבצים לבדיקה.',
	'ERR_UW_NO_MANIFEST'						=> 'לקובץ ZIP חסר קובץ manifest.php. לא ניתן להמשיך.',
	'ERR_UW_NO_VIEW'							=> 'צוינה תצוגה לא חוקית.',
	'ERR_UW_NO_VIEW2'							=> 'תצוגה לא הוגדרה. אנא עבור אל דף ניהול המערכת כדי לנווט לדף זה.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'העלאה לא חוקית.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'לא ניתן ליצור ספריית קבצים זמניים. בדוק את הרשאות הקובץ.',
	'ERR_UW_ONLY_PATCHES'						=> 'באפשרותך להעלות טלאים בדף זה בלבד.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'שגיאות שנמצאו במהלך בדיקת קדם-טיסה',
	'ERR_UW_UPLOAD_ERR'							=> 'קרתה שגיאה בהעלאת הקובץ, אנא נסה שוב!<br>\\n',
	'ERR_UW_VERSION'							=> 'SugarCRM System Version:',
    'ERR_UW_WRONG_TYPE'							=> 'This page is not for running',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'הקובץ שהועלה חורג מהנחיית upload_max_filesize בקובץ php.ini.',
													2 => 'הקובץ שהועלה חורג מהנחיית MAX_FILE_SIZE שצוינה בטופס HTML.',
													3 => 'הקובץ שהועלה הועלה באופן חלקי בלבד.',
													4 => 'לא הועלה קובץ.',
													5 => 'שגיאה לא ידועה.',
													6 => 'חסרה תיקייה זמנית.',
													7 => 'לא ניתן לכתוב קובץ בכונן.',
													8 => 'העלאת הקובץ הופסקה על ידי הרחבה.',
),

    'ERROR_HT_NO_WRITE'                         => 'לא מצליח לכתובת לקובץ %s',
    'ERROR_MANIFEST_TYPE'                       => 'קובץ המנשר חייב לציין את סוג החבילה.',
    'ERROR_PACKAGE_TYPE'                        => 'קובץ המנשר מציין סוג חבילה לא מוכר: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'The uploaded file is not compatible with this version of Sugar:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'הקובץ שהועלה אינו תואם את טעם זה (מהדורת Professional, Enterprise או Ultimate) של Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'שגיאה בשמירת %s הגדרת משתנה בבסיס הנתונים (key %s, value %s).',
    'ERR_NOT_ADMIN'                             => "גישה לא מורשית למערכת ניהול.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'אין לך הרשאה לגשת לדף זה',

    'LBL_BUTTON_BACK'							=> 'Back',
	'LBL_BUTTON_CANCEL'							=> 'Cancel',
	'LBL_BUTTON_DELETE'							=> 'מחק חבילה',
	'LBL_BUTTON_DONE'							=> 'בוצע',
	'LBL_BUTTON_EXIT'							=> 'צא',
	'LBL_BUTTON_INSTALL'						=> 'שדרוג קדם-טיסה',
	'LBL_BUTTON_NEXT'							=> 'Next',
	'LBL_BUTTON_RECHECK'						=> 'בדוק שוב',
	'LBL_BUTTON_RESTART'						=> 'התחל מחדש',

	'LBL_UPLOAD_UPGRADE'						=> 'Upload an upgrade',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'קובץ העלאה לא נמצא',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'גיבוי קובץ',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'ניתן למצוא את הקבצים שגובו משדרוג זה בתוך',
	'LBL_UW_BACKUP'								=> 'גיבוי קבצים',
	'LBL_UW_CANCEL_DESC'						=> 'Upgrade Wizard has been cancelled.  All temporary files and the uploaded zip file have been deleted.<br><br>Press "Done" to restart the Upgrade Wizard.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'שינויי סכמת חבילת תווים',
	'LBL_UW_CHECK_ALL'							=> 'סמן הכל',
	'LBL_UW_CHECKLIST'							=> 'שלבי שדרוג',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backups of Overwritten Files are in the following directory:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Manually merge the following files:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'תהליך שדרוג: מזג קבצים ידנית',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'אנא השתמש בכל שיטת diff שאתה מכיר כדי למזג קבצים אלה. עד שתהליך זה יסתיים, התקנת ה-SugarCRM שלך תהיה במצב לא ודאי, והשדרוג לא יושלם.',
	'LBL_UW_COMPLETE'							=> 'הסתיים',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'גרסה חדשה זו של Sugar מכילה הסכם רישיון חדש. האם ברצונך להמשיך?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'All system settings requirements satisfied',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'הגדרת PHP: העברת זמן חיוג לפי הפניה',
	'LBL_UW_COMPLIANCE_CURL'					=> 'מודול cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'מודול IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'מודול MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'פרמטר MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'הגדרת PHP: הגבלת זיכרון',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'הגדרת PHP: זרם',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'גרסת MySQL מינימלית',
    'LBL_UW_COMPLIANCE_DB'                      => 'גרסת מסד נתונים מינימלית',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'מיקום של קובץ php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'גרסת PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'הגדרת PHP: מצב בטוח',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'בדיקת הגדרות שרת',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'הגדרות שזוהו',
	'LBL_UW_COMPLIANCE_XML'						=> 'ניתוח XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'תמיכת ZIP',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'קבצים הועתקו בהצלחה',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'שינויי סכמת טבלה בהתאמה אישית',

	'LBL_UW_DB_CHOICE1'							=> 'אשף שדרוג מריץ SQL',
	'LBL_UW_DB_CHOICE2'							=> 'שאילתות SQL ידניות',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT נכשל - תוצאות ההשוואה משתנות',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'זכויות מיחדות של מסד נתונים',
	'LBL_UW_DB_ISSUES'							=> 'בעיות של מסד נתונים',
	'LBL_UW_DB_METHOD'							=> 'שיטת עדכון של מסד נתונים',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'צור טבלה [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'מחק מתוך [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'שנה טבלה [table] זרוק עמודה [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'כל הזכויות המיוחדות שזמינות',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'זכות מיוחדת נחוצה',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'The following upgrades have been installed:',
	'LBL_UW_END_DESC'							=> 'Congratulations, your system is now upgraded.',
	'LBL_UW_END_DESC2'							=> 'אם בחרת להריץ שלבים באופן ידני כמו מיזוגי קבצים או שאילתות SQL, אנא בצע זאת כעת. המערכת שלך תהיה במצב בלתי יציב עד השלמת שלבים אלה.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'השדרוג הסתיים.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'לחץ על בוצע כדי לצאת מאשף השדרוג.',
	'LBL_UW_END_LOGOUT'							=> 'Please log out of your account if you plan on upgrading further than this patch/upgrade level.',
	'LBL_UW_END_LOGOUT2'						=> 'יציאה',
	'LBL_UW_REPAIR_INDEX'						=> 'עבור שיפורי ביצועים של מסד הנתונים אנא הרץ את הסקריפט <a href="index.php?module=Administration&action=RepairIndex" target="_blank">מפתח תיקון</a>.',

	'LBL_UW_FILE_DELETED'						=> "has been removed.<br>",
	'LBL_UW_FILE_GROUP'							=> 'קבוצה',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'הרשאות קבצים',
	'LBL_UW_FILE_ISSUES'						=> 'בעיות של קבצים',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'הקובץ דורש Diff ידני',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>כל הקבצים שניתן לכתוב בהם</b>',
	'LBL_UW_FILE_OWNER'							=> 'בעלים',
	'LBL_UW_FILE_PERMS'							=> 'הרשאות',
	'LBL_UW_FILE_UPLOADED'						=> 'has been uploaded',
	'LBL_UW_FILE'								=> 'שם קובץ',
	'LBL_UW_FILES_QUEUED'						=> 'The following upgrades are ready to be installed:',
	'LBL_UW_FILES_REMOVED'						=> "The following files will be removed from the system:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>לחץ על הבא כדי להעלות חבילות שדרוג.</b>",
	'LBL_UW_FROZEN'								=> 'Required steps must be completed before continuing.',
	'LBL_UW_HIDE_DETAILS'						=> 'הסתר פרטים',
	'LBL_UW_IN_PROGRESS'						=> 'בתהליך',
	'LBL_UW_INCLUDING'							=> 'כולל',
	'LBL_UW_INCOMPLETE'							=> 'חסר',
	'LBL_UW_INSTALL'							=> 'התקנת קובץ',
	'LBL_UW_MANUAL_MERGE'						=> 'מיזוג קבצים',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Module is ready to be uninstalled.  Click \"Commit\" to proceed with installation.<br>",
	'LBL_UW_MODULE_READY'						=> "המודול מוכן להתקנה. לחץ על \"בצע\" כדי להמשיך בהתקנה.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'לא זוהו שדרוגים מתועדים.',
	'LBL_UW_NONE'								=> 'אין',
	'LBL_UW_NOT_AVAILABLE'						=> 'לא זמין',
	'LBL_UW_OVERWRITE_DESC'						=> "כל הקבצים שהשתנו יוחלפו, כולל כל התאמות אישיות של קוד ושינויי תבניות שביצעת. האם אתה בטוח שברצונך להמשיך?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'החלף את כל הקבצים',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'מיזוג ידני - שמור הכל',
	'LBL_UW_OVERWRITE_FILES'					=> 'שיטת מיזוג',
	'LBL_UW_PATCH_READY'						=> 'הטלאי מוכן להמשיך. לחץ על הכפתור "בצע" מטה כדי להשלים את תהליך השדרוג.',
	'LBL_UW_PATCH_READY2'						=> '<h2>התראה: נמצאו תצורות מותאמות אישית</h2><br />לקבצים הבאים יש שדות חדשים או תצורות מסך שעברו שינוי אשר הוחלו דרך Studio. הטלאי שאתה עומד להתקין מכיל גם שינויים לקבצים. עבור <u>כל קובץ</u> באפשרותך:<br><ul><li>[<b>ברירת מחדל</b>] לשמור את הגרסה שלך בכך שתשאיר את תיבת הסימון ריקה. שינויי הטלאי לא יתקבלו.</li>או<li>לאשר את הקבצים שעודכנו בכך שתבחר את תיבת הסימון. התצורות שלך ידרשו החלה חוזרת באמצעות Studio/</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'ליצור פריט משימה עבור מיזוג ידני?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'בדיקת קדם-טיסה',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differentiated',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'שלח לעצמך תזכורת בדוא"ל למיזוג ידני?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'הקבצים שרשומים מטה שונו. בטל את הסימון של פריטים שדורשים מיזוג ידני. <i>הסימון של שינויי תצורה שזוהו יבוטל אוטומטית; סמן כל שינוי שיש להחליף.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'לא נדרש מיזוג קבצים ידני.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'לא נדרש.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'קבצים שנשמרו אוטומטית:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'All Preflight tests passed. Press "Next" to commit these changes.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'לחץ על הבא כדי להעתיק את הקבצים ששודרגו למערכת.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>הערה: </b>יתר תהליך השדרוג הוא חובה, ולחיצה על הבא תדרוש שתשלים את התהליך. במידה ואין ברצונך להמשיך, לחץ על הכפתור ביטול.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'שנה את כל הקבצים',

	'LBL_UW_REBUILD_TITLE'						=> 'בנה מחדש תוצאה',
	'LBL_UW_SCHEMA_CHANGE'						=> 'שינויי סכמה',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'הצג הגדרות שזוהו',
	'LBL_UW_SHOW_DB_PERMS'						=> 'הצג הרשאות מסד נתונים חסרות',
	'LBL_UW_SHOW_DETAILS'						=> 'הצג פרטים',
	'LBL_UW_SHOW_DIFFS'							=> 'הצג קבצים שדורשים מיזוג ידני',
	'LBL_UW_SHOW_NW_FILES'						=> 'הצג קבצים עם הרשאות פגומות',
	'LBL_UW_SHOW_SCHEMA'						=> 'הצג סקריפט שינוי סכמה',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'הצג שאילתות פגומות',
	'LBL_UW_SHOW'								=> 'Show',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'קבצים שדולגו',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'מדלג על החלפות קבצים - נבחר מיזוג ידני.',
	'LBL_UW_SQL_RUN'							=> 'בדוק מתי הורץ SQL ידני',
	'LBL_UW_START_DESC'							=> 'Welcome to the SugarCRM Upgrade Wizard. This wizard is designed to assist administrators when upgrading their SugarCRM instances.  Please follow the instructions carefully.',
	'LBL_UW_START_DESC2'						=> 'We highly recommend that you perform the upgrade on a cloned instance of your production server first.  Please backup the database and the system files (all of the files in the SugarCRM folder) before performing this operation.',
	'LBL_UW_START_DESC3'						=> 'לחץ על הבא כדי לבצע בדיקה במערכת שלך כדי לוודא שהמערכת מוכנה לשדרוג. הבדיקה כולל הרשאות קבצים, זכויות במסד נתונים והגדרות שרת.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'אשף השדרוג החדש כעת ימשיך את תהליך השדרוג. אנא המשך בשדרוג שלך.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'ברוך הבא לאשף השדרוג החדש',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'בודק כעת, אנא המתן. זה יכול להיארך עד 30 שניות.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'מציאת כל הקבצים החשובים לבדיקה.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'קבצים',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'נמצאו',

	'LBL_UW_TITLE_CANCEL'						=> 'Cancel',
	'LBL_UW_TITLE_COMMIT'						=> 'בצע שדרוג',
	'LBL_UW_TITLE_END'							=> 'תדרוך',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'בדיקת קדם-טיסה',
	'LBL_UW_TITLE_START'						=> 'ברוך הבא',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'System Checks',
	'LBL_UW_TITLE_UPLOAD'						=> 'Upload Upgrade',
	'LBL_UW_TITLE'								=> 'אשף שדרוג',
	'LBL_UW_UNINSTALL'							=> 'הסר התקנה',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'קבל רישיון',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'המר רישיון',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'מודולים משודרגים/מותאמים אישית',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'המודולים הבאים מזוהים בתור מותאמים אישית ושמורים',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'המודולים הבאים מזוהים בתור מותאמים אישית על ידי Studio ומשודרגים',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'התחלה בתהליך',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'System Checks in progress',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'בדיקת רישיון בתהליך',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight Check in progress',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'העתקת קובץ בתהליך',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade in progress',
    'LBL_UW_COMMIT_DESC'						=> 'לחץ על הבא כדי להריץ סקריפטים נוספים של שדרוג.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'שדרוג סקריפטים בתהליך',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Upgrade Summary in progress',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'in progress',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'זמן משוער',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Upgrade Cancel and Cleanup in progress',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'השדרוג עלול להיארך זמן מה',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Upload checks in progress',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Uploading upgrade package...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'האם תרצה ש-Sugar יזנח את סכמה 451 הישנה?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'אשף השדרוג זונח את סכמה 451 הישנה',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'זניחה ידנית של סכמה לאחר השדרוג',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'שיטת זניחת סכמה ישנה',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'הצג סכמה ישנה שניתנת לזניחה',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'שאילתות שדולגו',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Your version of PHP is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'מצב Php Backward Compatibility מופעל. העבר את zend.ze1_compatibility_mode למצב כבוי כדי להמשיך',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Action',
    'LBL_ML_CANCEL'             => 'Cancel',
    'LBL_ML_COMMIT'=>'חייב',
    'LBL_ML_DESCRIPTION' => 'תיאור',
    'LBL_ML_INSTALLED' => 'תאריך התקנה',
    'LBL_ML_NAME' => 'שם',
    'LBL_ML_PUBLISHED' => 'תאריך פרסום',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'לא בר-התקנה',
    'LBL_ML_VERSION' => 'גרסה',
	'LBL_ML_INSTALL'=>'התקן',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'מעקב',
	'LBL_MODULE_NAME' => 'אשף השדרוג',
	'LBL_MODULE_NAME_SINGULAR' => 'אשף השדרוג',
	'LBL_UPLOAD_SUCCESS' => 'חבילת השדרוג הועלתה בהצלחה. לחץ על הבא כדי לבצע בדיקה סופית.',
	'LBL_UW_TITLE_LAYOUTS' => 'אשר תצורות',
	'LBL_LAYOUT_MODULE_TITLE' => 'תצורות',
	'LBL_LAYOUT_MERGE_DESC' => 'זמינים שדות חדשים שנוספו כחלק משדרוג זה וניתן לצרף אותם אוטומטית לתצורות המודול הקיימות שלך. כדי ללמוד עוד על השדות החדשים, אנא עבור אל הערות השחרור עבור הגרסה שאליה אתה משדרג.<br><br>אם אין ברצונך לצרף את השדות החדשים, אנא הורד את הסימון של המודול, והתצורות שהתאמת אישית יישארו ללא שינוי. השדות יהיו זמינים ב-Studio לאחר השדרוג. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'לחץ על הבא כדי לאשר את השינויים ולסיים את השדרוג.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'לחץ על הבא כדי לסיים לשדרג.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'אשר תצורות',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'אשר תוצאות תצורה',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'התצורות הבאות מוזגו בהצלחה:',
	'LBL_SELECT_FILE' => 'בחר קובץ:',
	'LBL_LANGPACKS' => 'חבילת שפה' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'טוען מודולים' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'שדרוגי טלאי' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'ערכות נושא' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'זרימת עבודה' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'שידרוג' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'מעבד' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'זמין לכולם',
);
