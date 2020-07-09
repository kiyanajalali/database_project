<!DOCTYPE html>
    <html>
    <head>
        <title>Watch PlayList</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div id="frm">
    
        <form action="watchPlaylist.php" method="POST">
    
        <p>
        <label>PlayListId:</label>
        <input type="text" id="playlist_id" name="playlist_id"/>
        </p>
    
        <input type="submit" id="btn" value="show music"/>
        </p>
        </form>
        </div>
    
    <div id="frm">
    
    <form action="watchAlbum.php" method="POST">

    <p>
    <label>AlbumId:</label>
    <input type="text" id="music_id" name="music_id"/>
    </p>

    <input type="submit" id="btn" value="show music "/>
    </p>
    </form>
    </div>
 
    <div id="frm">
    
    <form action="watchLastMusic.php" method="POST">
    <p>
    <label>FollowId:</label>
    <input type="text" id="user_id" name="user_id"/>
    </p>

    <input type="submit" id="btn" value="show last music "/>
    </p>
    </form>
    </div>


    <div id="frm">
    
    <form action="watchLast5NewMusicArtist.php" method="POST">
    <p>
    <label>Userid:</label>
    <input type="text" id="user_id" name="user_id"/>
    </p>

    <input type="submit" id="btn" value="show 5 New music "/>
    </p>
    </form>
    </div>

    <div id="frm">
    
    <form action="showSameNationalityArtist.php" method="POST">
    <p>
    <label>nationality:</label>
    <input type="text" id="nationality" name="nationality"/>
    </p>

    <input type="submit" id="btn" value="show Same Natitionity Artist "/>
    </p>
    </form>
    </div>

    <div id="frm">
    
    <form action="sugestMusic.php" method="POST">
    <p>
    <label>playList_id:</label>
    <input type="text" id="playlist_id" name="playlist_id"/>
    </p>

    <input type="submit" id="btn" value="show Sugestion Music "/>
    </p>
    </form>
    </div>

    <div id="frm">
    
    <form action="show5PopularMusic.php" method="POST">

    <input type="submit" id="btn" value="show 5 Popular Music "/>
    </p>
    </form>
    </div>
    </body>
    </html>