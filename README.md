# WebDev---Assignment3

Hi Fred,
I have uploaded all files. I assume that the database is not part of the upload requirements here. (Just in 000WebHosting.)

All of the database requirements are working. The list of adventures will show in chronological order.

I am still having issues with sessions starts as I did in assignment 2. I haven't been able to resolve it yet. I get the following error message:
Warning: session_start(): Session cannot be started after headers have already been sent in /storage/ssd5/151/20800151/public_html/header.php on line 2

My index.php page doesn't show the trips from the database. (I left this page the same as it was in assignment 2.) To see the new functionality, use the hamburger icon in the header and select Add Adventure, you can add a new trip and then click the View Adventures link to see all adventures in the DB. This is all-adventures.php.

I used a light grey background for most pages but could not on the pages that have the main image (canoe in lake). If I used it there, the image would disappear. I had no idea why this was happening and was unable to find a solution so I left the background white on those two pages. (index.php and all-adventures.php)

If the admin-confirm.php is refreshed or returned to by clicking back on the all-adventures.php page, the most recent adventure that was added will be added again. I attempted to fix this problem by adding code to admin-confirm.php. The plan was to query the DB for any records that matched the new details to be added (session variables from the admin-add.php page) and only add the new adventure if the select query returned no rows. It was a good plan but I didn't manage to get it to work. I left the code there but commented it out.

Thanks,
Keith Elms
