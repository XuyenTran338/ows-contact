<button><a href="<?=base_url()?>contact/add">Thêm mới</a></button>
<table cellpadding="5" cellspacing="0" border="1">
    <tr style="color: white; background-color: #16a291;" >
        <th>#</th>
        <th>Tên</th>
        <th>Số điện thoại</th>
        <th></th>
    </tr>
    <?php foreach ($contacts as $index => $item): ?>
    <tr class="<?= ($index % 2) ? 'odd' : 'even' ?>">
        <td class="center"><?= $index+1 ?></td>
        <td><?= $item->name ?></td>
        <td><?= $item->phone1 ?></td>
        <td class="center"><a href="<?=base_url()?>contact/edit/<?= $item->id ?>">Chi tiết</a></td>
    </tr>
    <?php endforeach; ?>
</table>

	   