import urllib2
true = 1
status = ''
while(true):
                try:
                    response = urllib2.urlopen('http://127.0.0.1/xampp/htdocs/dashboard/switch/buttonStatus.php')
                    status = response.read()
                except urllib2.HTTPError as e:
                    print e.code

                except urllib2.URLError as e:
                    print e.args

                print status
                if status=='ON':
                                --GPIO.output(5,True)
                elif status=='OFF':
                                --GPIO.output(5,False)
