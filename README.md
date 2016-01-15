PHP Wrapper for Flipkart API & Ebay API
============================
A simple PHP wrapper for the official Flipkart API. Helps you integrate the API for any custom use.

Flipkart has a [Product Feeds API] API Search Query based on Keywords https://affiliate-api.flipkart.net/affiliate/search/json?query=XXXX&resultCount=X(still in beta). There isn't any official wrappers for PHP (yet?) - so I decided to go ahead and build one.

The API seems complicated to use, but I've managed to build a simple demo where you can select a  products are displayed in a table. 

For the code to work, you'll need to generate an access token through your [affiliate account](http://www.flipkart.com/affiliate/).
 
 For the code to work, you'll need to generate an access token through your [affiliate account] https://go.developer.ebay.com/
 
Note that it is recommended to save the useful data retrieved from the API to a database first, and then update this database at certain intervals. This way, you won't exceed the API limits, and your site will load faster.

Feel free to use it, fork it, and send pull requests for any improvements!

