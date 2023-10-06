<!-- The main content of the table subpage. It contains of an loop that iterate throu the array and builds an table with the data from the array -->
<main>
    <div class="container">
        <div class="table-container">
            <div class="table-item table-header">
                <h1>The Teams:</h1>
            </div>
            <div class="table-item table-data">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Team</th>
                            <th>League</th>
                            <th>Last Time Champions</th>
                            <th>City</th>
                            <th>Nickname</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($teams as $team => $data) : ?>
                            <tr>
                                <td><?= $team; ?></td>
                                <td><?= $data['league']; ?></td>
                                <td>
                                    <?php //checks if their is value in the 'last-time-champions' key, if its null it prints 'N/A'
                                    if ($data['last-time-champions'] !== null) {
                                        echo $data['last-time-champions'];
                                    } else {
                                        echo 'N/A';
                                    } ?></td>
                                <td><?= $data['city']; ?></td>
                                <td>
                                    <?php // checks if 'nickname' exists, if not then it prints 'n/a' else prints nicknamet
                                    if (isset($data['nickname'])) {
                                        echo $data['nickname'];
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php echo $data['url']; ?>">Website</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>