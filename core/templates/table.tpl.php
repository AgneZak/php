<table>
    <tr>
        <?php foreach ($data['headers'] as $header): ?>
            <th><?php print $header; ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($data['rows'] as $row): ?>
        <tr>
            <?php foreach ($row as $col): ?>
                <td><?php print $col; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>