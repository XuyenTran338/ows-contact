<form method="post" action="<?=base_url()?>contact/save">
    <div class="input">
        <label for="name">Tên</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div class="input">
        <label for="phone1">Số điện thoại 1</label>
        <input type="number" name="phone1" id="phone1" required>
    </div>
    <div class="input">
        <label for="phone2">Số điện thoại 2</label>
        <input type="number" name="phone2" id="phone2" required>
    </div>
    <div class="input">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div class="input">
        <label for="fb">Facebook</label>
        <input type="text" name="fb" id="fb" required>
    </div>
    <div class="input">
        <label for="company">Company</label>
        <input type="text" name="company" id="company" required>
    </div>
    <br>
    <button type="submit">Thêm mới</button>
</form>
