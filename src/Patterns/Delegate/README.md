Name: Delegate <br/>
The Delegate Design Pattern removes decisions or complex functionality from the core object by distributing or delegating them to other
objects <br/>
When an object contains individual portions of complex but independent functionality that must be executed based on a decision, it is best practice based on the Delegate Design Pattern

=========================

This website has a feature to create playlists from MP3 files. These could come from the visitor's hard drive or from locations on Internet. The visitor has the choice to download the playlists in either M3U or PSL format. (we just show creation of playlist for brevity.)

========================================================
UPDATE:
The Sales team for this website found out about five more playlist formats that are available. Consequently, they were started selling the features
of the software before it was even created. At this point, the programmer still don't know which new playlist formats were sold. <br/>
In the meantime, the code can be modified to use Delegate Design Pattern. The aim is to eliminate that potentially unwieldy if/else statement.