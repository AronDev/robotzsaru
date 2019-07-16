<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Akták</title>

        <script>
		function search_fileName() {
		  // Declare variables
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("f_search");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("files");
		  tr = table.getElementsByTagName("tr");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("td")[1];
		    if (td) {
		      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    }
		  }
		}
        </script>
    </head>
    <body>
        <h1>Akták</h1><br />
        <div id="files-content">
            <input class='search' id='f_search' onkeyup='search_fileName()'>
            <a class='new-button' style='float:right;'>Új akta</a><br />
            <table id="files">
                <tr>
                    <th class='files-header'>Akta</th>
                    <th class='files-header'>Időpont</th>
                    <th class='files-header'>Szerző</th>
                    <th class='files-header'>Megnevezés</th>
                    <th class='files-header'>Művelet</th>
                </tr>
                <?php
                $result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author ORDER BY timestamp DESC");
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='files-row'>";
                            echo "<td class='files-column'>" . $row['file_name'] . "</td>";
                            echo "<td class='files-column'>" . $row['timestamp'] . "</td>";
                            echo "<td class='files-column'>" . $row['playername'] . "</td>";
                            echo "<td class='files-column'>" . $row['title'] . "</td>";
                            echo "<td class='files-column'><a href='index.php?p=files&t=view&dbid=" . $row['dbid'] . "'><i class='far fa-eye icon'></i></a></td>";
                        echo "</tr>";
                    }
                } else echo "<tr><td colspan='4'>Nincsenek akták!</td></tr>";
                ?>
            </table>
        </div>
    </body>
</html>
