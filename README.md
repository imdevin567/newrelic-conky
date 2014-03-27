#New Relic Conky Widget

This conky widget will display your application's stats via New Relic. All you need is an API key!

##Installation

1. In your home directory, run:
	
	git clone https://github.com/imdevin567/newrelic-conky.git

2. Edit .conky-scripts/newrelic.php to match your New Relic account settings. There are 3 values to edit:

	$apikey = 'NEWRELIC_API_KEY';
	$accountid = 'NEWRELIC_ACCOUNT_ID';
	$applicationid = 'NEWRELIC_APPLICATION_ID';

3. Start the conky file with 

	conky -d -c .conkyrc

Or add to your startup script. 

Enjoy!
