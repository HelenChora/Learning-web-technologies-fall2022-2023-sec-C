<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: Login.php?err=bad_request');
}

?>
<html>
<head>
    <title>Lab5</title>
</head>
<body>
    <table border="1" width="100%">
        <tr height="50px">
            
             <td style="text-align: right;">
                <h1 style ="text-align: left;">Company</h1>
                <p><a href="Bob.html">Logged in as Bob</a></p>
                <p style="display: inline;">|</p>
                <a href="logout.html">Log out</a>
            </td></tr></table>

        </table>
        <table border="1" cellspacing="0" height="250px" width="100%">
        <tr>
            <td width="250px">
                <h1>Account</h1><hr>
                <ul>
                    <li>
                        <a href="Dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="View profile.html">View Profile</a>
                    </li>
                    <li>
                        <a href="Edit profile.html">Edit Profile</a>
                    </li>
                    <li>
                        <a href="Profile picture.html">Profile Picture</a>
                    </li>
                    <li>
                        <a href="Change password.html">Change Password</a>
                    </li>
                    <li>
                        <a href="Logout.html">Logout</a>
                    </li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend>
                        <h3>Edit Profile</h3></legend>
                        <label for="name">Name:</label>
                        <input type="text" value="Bob"><br><br>
                       <label for="email">Email:</label>
                       <input type="email"  value="bob@aiub.edu"><br><br>
                       <input type="radio" id="male" name="gender" value="Male"></input>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female"></input>
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="Other"></input>
                            <label for="other">Other</label><br><br>
                            <input type="text" style="width: 20px;">
                            <p style="display: inline;">/</p>
                            <input type="text" style="width: 20px;">
                            <p style="display: inline;">/</p>
                            <input type="text" style="width: 20px;"><br><br>
                            <p style="display: inline;">(dd/mm/yyyy)</p><br><br>
                            <button type="submit">Submit</button>
                            </fieldset>
                            </td>
                            </tr>
                            </table>
                            <table border="1" cellspacing="0" height="25px" width="100%">
                                <tr>
                                    <td>
                                        <footer style="text-align: center;">Copyright © 2017</footer>
                                    </td>
                                </tr>
                                </table>
                                </body>
                                </html>
