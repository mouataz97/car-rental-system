<h1>🚗 Cars List</h1>

<a href="?url=cars&action=create">➕ Add Car</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Price</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($cars as $car): ?>
        <tr>
            <td><?= $car['id'] ?></td>
            <td><?= $car['brand'] ?></td>
            <td><?= $car['model'] ?></td>
            <td><?= $car['price_per_day'] ?></td>
            <td><?= $car['status'] ?></td>
            <td>
                <a href="?url=cars&action=edit&id=<?= $car['id'] ?>">✏ Edit</a>
                |
                <a href="?url=cars&action=delete&id=<?= $car['id'] ?>"
                   onclick="return confirm('Are you sure?')">
                    🗑 Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>