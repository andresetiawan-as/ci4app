<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <caption>Schedule for the week of March 6</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Country</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    <?php foreach ($film as $value) : ?>
                        <tr>
                            <th scope="row"><?= $index ?></th>
                            <td>
                                <img src="/img/<?= $value['cover'] ?>" alt="mulan" class="sampul">
                            </td>
                            <td><?= $value['movie'] ?></td>
                            <td><?= $value['country'] ?></td>
                            <td><?= $value['release_date'] ?></td>
                            <td><?= $value['duration'] ?></td>
                        </tr>
                        <?php $index++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>