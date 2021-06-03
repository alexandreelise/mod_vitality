# Vitality - Admin Module
> Core Web Vitals module shown raw json in admin area of your Joomla! website

## WHY ?
A friend of mine suggested this module idea and I quickly coded it and shared it for free with the Joomla! community 
> "You all awesome super joomlers!"

## WHAT ?
This an admin module (module in the Joomla! backend only). You can choose to put it in the position "cpanel" in the default admin template in Joomla!

## HOW ?
After reading the [Official Documentation](https://developers.google.com/speed/docs/insights/v5/get-started)
I decided to use the Joomla! core Http client to make a get request using php. This is separated in a helper abstract class so that this logic is out of the module default layout.
For now, there is no "fancy visuals". Just raw json output. But this module was coded in a way that is easy for designers or frontend developers to make it look really good as they wish using admin module layout overrides.

## INSTALLATION
* Go to build folder
* Download the latest zip file
* Install the extension on your Joomla! live website (it won't work on local environment unless maybe with something like ngrok)
* Set the url of your website
* Create an API key [here](https://developers.google.com/speed/docs/insights/v5/get-started)
* Make sure you limit the scope of the API key to just what you use to mitigate unauthorized access or abuse to your keys on your behalf
* Choose a module position (eg: cpanel)
* Publish the module
* Go to main administration page and refresh the page. It should show the raw json response of your Joomla! website core web vitals

## CONTRIBUTIONS
All contributions are welcomed to help improve this project. Feel free to jump in and share your constructive feedback.

## COMMUNITY

In English:

> Get in touch on social media or contact me directly

* Website: https://alexandre-elise.fr/en
* Contact: https://alexandre-elise.fr/en/say-hello
* Newsletter: https://alexandre-elise.fr/en/get-newsletter

---------------------------------------------------

En français

> Contactez-moi directement ou bien sur les réseaux sociaux

* Site web: https://alexandre-elise.fr
* Contact: https://alexandre-elise.fr/contact
* Newsletter: https://alexandre-elise.fr/newsletter

-------------------------------------------------------

* Twitter: https://twitter.com/mralexandrelise
* Facebook: https://www.facebook.com/mralexandrelise
* Linkedin: https://www.linkedin.com/company/mralexandrelise
* Youtube: [coderparlerpartager](https://www.youtube.com/channel/UCCya8rIL-PVHm8Mt4QPW-xw?sub_confirmation=1)
