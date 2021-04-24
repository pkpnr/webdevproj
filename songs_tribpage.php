<?php
$pageNm = 'About Us';
include('header_tribpage.php');
?>

<table>
    <tr>
        <th>Music ID</th>
        <th>Song Name</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Release Date</th>
        <th>Duration</th>
        <th>Genre</th>
        <th>Language</th>
    </tr>

<?php
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "lisa10mnb!";
    $dbName = "roseanne";
    
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    $sql = "SELECT * FROM DISCOGRAPHY;";
    $res = mysqli_query($conn, $sql);
    $resChe = mysqli_num_rows($res);

    if ($resChe > 0)
    {
        while ($row = mysqli_fetch_assoc($res))
        {
            echo "<tr><td>" . $row['MusicID'] . "</td><td>"
            . $row['SongName'] . "</td><td>"
            . $row['Artist'] . "</td><td>"
            . $row['Album'] . "</td><td>"
            . $row['ReleaseDate'] . "</td><td>"
            . $row['Duration'] . "</td><td>"
            . $row['Genre'] . "</td><td>"
            . $row['Language'] . "</td></tr>";
        }

        echo "</table>";
    }
    else
    {
        echo "0 result(s).";
    }
?>

</table>