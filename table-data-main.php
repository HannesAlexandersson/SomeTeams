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
                                    <?php //Kollar ifall det finns värde i kategorin 'last time champions' eller omdet är null. Är det null printas 'N/A'
                                    if ($data['last-time-champions'] !== null) {
                                        echo $data['last-time-champions'];
                                    } else {
                                        echo 'N/A';
                                    } ?></td>
                                <td><?= $data['city']; ?></td>
                                <td>
                                    <?php // kollar om det finns en kategori 'nickname' finns det inte det så printas 'n/a' annars printas nicknamet
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