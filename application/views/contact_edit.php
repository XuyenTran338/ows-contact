<form method="post" action="<?=base_url()?>contact/save/<?= $contact_item->id ?>">
    <div class="input">
        <label for="name">Tên</label>
        <input type="text" name="name" id="name" value="<?= $contact_item->name ?>" required>
    </div>
    <div class="input">
        <label for="phone1">Số điện thoại 1</label>
        <input type="number" name="phone1" id="phone1" value="<?= $contact_item->phone1 ?>" required>
    </div>
    <div class="input">
        <label for="phone2">Số điện thoại 2</label>
        <input type="number" name="phone2" id="phone2" value="<?= $contact_item->phone2 ?>" required>
    </div>
    <div class="input">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $contact_item->email ?>" required>
    </div>
    <div class="input">
        <label for="fb">Facebook</label>
        <input type="text" name="fb" id="fb" value="<?= $contact_item->fb ?>" required>
    </div>
    <div class="input">
        <label for="company">Company</label>
        <input type="text" name="company" id="company" value="<?= $contact_item->company ?>" required>
    </div>
    <br>
    <button type="submit">Cập nhật</button>
    <button type="button" onclick="remove(<?= $contact_item->id?>)">Xóa</button>
    <button onclick="javascript: history.back()">Quay lại</button>
</form>
<script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous">
</script>
<script>
    function remove(id) {
       var isConfirm = confirm("Bạn có chắc muốn xóa không?");
       if(isConfirm){
            $.get('<?=base_url()?>contact/delete/'+id).then(function(data){
                if(data == "success"){
                     window.location = "http://localhost/ows-contact";
                }else{
                    alert('Đã có lỗi xảy ra!');
                }
            });
       }
    }
</script>