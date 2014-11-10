Name: Facade <br/>
The Facade Design Pattern hides complexity from a calling object by creating a simple facade interface in front of the collections
 of required logic and methods

 ============================================
 EXAMPLE: <br>
 The website passes its inventory to a different system in the company nightly as a part of a required audit. This other system will accept
 request via a post to its web service. It is an older system, however, and works with only uppercase strings. The code needs to acquire
 CD objects, apply uppercase to all their porperties, and create a well-formed XML document to be posted to the web service.

