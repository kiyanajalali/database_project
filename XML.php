<!DOCTYPE html>
<html>
<head>
	<title>FOLLOW USER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">

	<form action="follow.php" method="POST">

    <p>
    <label>userName:</label>
    <input type="text" id="user_id1" name="user_id1"/>
	</p>

    <p>
    <label>Email:</label>
    <input type="text" id="user_id2" name="user_id2"/>
	</p>


    <p>
    <input type="submit" id="btn" value="follow"/>
	</p>
	</form>
    </div>

    <div id="frm">

<form action="follow_list.php" method="POST">

<p>
<label>userName:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<input type="submit" id="btn" value="follow_list"/>
</p>
</form>
</div>

<div id="frm">

<form action="get_question.php" method="POST">

<p>
<input type="submit" id="btn" value="get_question"/>
</p>
</form>
</div>

<div id="frm">

<form action="like.php" method="POST">

<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<input type="submit" id="btn" value="like"/>
</p>
</form>
</div>

<div id="frm">

<form action="likedsong.php" method="POST">


<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<input type="submit" id="btn" value="liked_song"/>
</p>
</form>
</div>

<div id="frm">

<form action="loginUser.php" method="POST">


<p>
<label>UserName:</label>
<input type="text" id="UserName" name="UserName"/>
</p>

<p>
<label>password:</label>
<input type="text" id="password" name="password"/>
</p>

<p>
<label>user_type:</label>
<input type="text" id="user_type" name="user_type"/>
</p>
<p>
<input type="submit" id="btn" value="loginUser"/>
</p>
</form>
</div>

<div id="frm">

<form action="password_rec2.php" method="POST">


<p>
<label>answer:</label>
<input type="text" id="answer" name="answer"/>
</p>

<p>
<label>user_name:</label>
<input type="text" id="user_name" name="user_name"/>
</p>

<p>
<label>password:</label>
<input type="text" id="password" name="password"/>
</p>
<p>
<input type="submit" id="btn" value="password_rec2"/>
</p>
</form>
</div>

<div id="frm">

<form action="password_recovery.php" method="POST">


<p>
<label>userName:</label>
<input type="text" id="userName" name="userName"/>
</p>

<p>
<input type="submit" id="btn" value="password_recovery"/>
</p>
</form>
</div>

<div id="frm">

<form action="play_music1.php" method="POST">
<p>
<input type="submit" id="btn" value="play_music1"/>
</p>
</form>
</div>


<div id="frm">

<form action="rdelate_rec.php" method="POST">
<p>
<label>userName:</label>
<input type="text" id="userName" name="userName"/>
</p>
<p>
<input type="submit" id="btn" value="rdelate_rec"/>
</p>
</form>
</div>

<div id="frm">

<form action="reject_artist.php" method="POST">
<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>
<p>
<input type="submit" id="btn" value="reject_artist"/>
</p>
</form>
</div>
<div id="frm">

<form action="report_to_admin.php" method="POST">
<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>
<p>
<input type="submit" id="btn" value="report_to_admin"/>
</p>
</form>
</div>

<div id="frm">

<form action="report_to_admin2.php" method="POST">
<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<p>
<label>message:</label>
<input type="text" id="message" name="message"/>
</p>
<p>
<input type="submit" id="btn" value="report_to_admin"/>
</p>
</form>
</div>

<div id="frm">

<form action="rupdate_pass.php" method="POST">
<p>
<label>userName:</label>
<input type="text" id="userName" name="userName"/>
</p>

<p>
<label>Email:</label>
<input type="text" id="Email" name="Email"/>
</p>

<p>
<label>last_name:</label>
<input type="text" id="last_name" name="last_name"/>
</p>

<p>
<label>first_name:</label>
<input type="text" id="first_name" name="first_name"/>
</p>

<p>
<label>password:</label>
<input type="text" id="password" name="password"/>
</p>

<p>
<label>nationality:</label>
<input type="text" id="nationality" name="nationality"/>
</p>

<p>
<label>q_id:</label>
<input type="text" id="q_id" name="q_id"/>
</p>

<p>
<label>answer:</label>
<input type="text" id="answer" name="answer"/>
</p>
<p>
<input type="submit" id="btn" value="rupdate_pass"/>
</p>
</form>
</div>

<div id="frm">

<form action="search_string.php" method="POST">


<p>
<label>userName:</label>
<input type="text" id="string" name="string"/>
</p>

<p>
<input type="submit" id="btn" value="search_String"/>
</p>
</form>
</div>

<div id="frm">

<form action="search_string.php" method="POST">


<p>
<label>date:</label>
<input type="date" id="string" name="string"/>
</p>

<p>
<input type="submit" id="btn" value="search_String"/>
</p>
</form>
</div>

<div id="frm">

<form action="unfollow.php" method="POST">


<p>
<label>user_id1:</label>
<input type="text" id="user_id1" name="user_id1"/>
</p>

<p>
<input type="submit" id="btn" value="unfollow"/>
</p>
</form>
</div>

<div id="frm">

<form action="unlike.php" method="POST">


<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>
<p>
<input type="submit" id="btn" value="unlike"/>
</p>
</form>
</div>

<div id="frm">

<form action="verify_artist.php" method="POST">

<p>
<input type="submit" id="btn" value="verify_artist"/>
</p>
</form>
</div>

<div id="frm">

<form action="verify_artist2.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<input type="submit" id="btn" value="verify_artist2"/>
</p>
</form>
</div>

<div id="frm">

<form action="view_music_from_report.php" method="POST">
<p>
<input type="submit" id="btn" value="view_music_from_report"/>
</p>
</form>
</div>

<div id="frm">

<form action="view_profile.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<input type="submit" id="btn" value="view_profile"/>
</p>
</form>
</div>


<div id="frm">

<form action="f_get_listener.php" method="GET">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<label>birth_date:</label>
<input type="text" id="birth_date" name="birth_date"/>
</p>

<p>
<input type="submit" id="btn" value="f_get_listener"/>
</p>
</form>
</div>

<div id="frm">

<form action="add_to_playlist.php" method="POST">

<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>
<p>
<label>playlist_id:</label>
<input type="text" id="playlist_id" name="playlist_id"/>
</p>

<p>
<label>date:</label>
<input type="date" id="Y-m-d" name="Y-m-d"/>
</p>
<p>
<input type="submit" id="btn" value="add_to_playlist"/>
</p>
</form>
</div>

<div id="frm">

<form action="create_album.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<label>title:</label>
<input type="text" id="title" name="title"/>
</p>
<p>
<label>gener:</label>
<input type="text" id="gener" name="gener"/>
</p>

<p>
<label>date:</label>
<input type="date" id="Y-m-d" name="Y-m-d"/>
</p>
<p>
<input type="submit" id="btn" value="create_album"/>
</p>
</form>
</div>

<div id="frm">

<form action="create_playlist.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<input type="submit" id="btn" value="create_playlist"/>
</p>
</form>
</div>

<div id="frm">

<form action="delete_album.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="album_id" name="album_id"/>
</p>

<input type="submit" id="btn" value="delete_album"/>
</p>
</form>
</div>

<div id="frm">

<form action="delete_playlist.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<label>playlist_id:</label>
<input type="text" id="playlist_id" name="playlist_id"/>
</p>
<input type="submit" id="btn" value="delete_playlist"/>
</p>
</form>
</div>
<div id="frm">

<form action="delete_user.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<input type="submit" id="btn" value="delete_user"/>
</p>
</form>
</div>

<div id="frm">

<form action="delete_music_from_album.php" method="POST">

<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<p>
<label>album_id:</label>
<input type="text" id="album_id" name="album_id"/>
</p>

<input type="submit" id="btn" value="delete_music_from_album"/>
</p>
</form>
</div>

<div id="frm">

<form action="delete_music_from_playlist.php" method="POST">

<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<p>
<label>playlist_id:</label>
<input type="text" id="playlist_id" name="playlist_id"/>
</p>
<input type="submit" id="btn" value="delete_music_from_playlist"/>
</p>
</form>
</div>

<div id="frm">

<form action="delete_music_from_report.php" method="POST">

<p>
<label>playlist_id:</label>
<input type="text" id="report_id" name="report_id"/>
</p>
<input type="submit" id="btn" value="delete_music_from_report"/>
</p>
</form>
</div>

<div id="frm">

<form action="f_get_inf_artist.php" method="GET">

<p>
<label>artist_name:</label>
<input type="text" id="artist_name" name="artist_name"/>
</p>

<p>
<label>nationality:</label>
<input type="text" id="nationality" name="nationality"/>
</p>

<p>
<label>activity_start_date:</label>
<input type="text" id="activity_start_date" name="activity_start_date"/>
</p>

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>
<input type="submit" id="btn" value="f_get_inf_artist"/>
</p>
</form>
</div>

<div id="frm">

<form action="findFollowerArtist.php" method="POST">

<p>
<label>user_id:</label>
<input type="text" id="user_id" name="user_id"/>
</p>

<p>
<label>music_id:</label>
<input type="text" id="music_id" name="music_id"/>
</p>

<input type="submit" id="btn" value="findFollowerArtist"/>
</p>
</form>
</div>

</body>
</html>