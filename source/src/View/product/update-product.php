<form action="" method="post">

    <h2>Thêm mặt hàng</h2>
    <table>
        <tr>
            <th><label for="names">Tên hàng:</label></th>
            <th><input name="names" type="text" id="names"></th>
        </tr>
        <tr>
            <th><label for="types">Loại hàng:</label></th>
            <th><select name="types" id="types">
                    <?php foreach ($products as $key => $product): ?>
                        <option value="<?php echo $product['name'] ?>"><?php echo $product['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </th>
        </tr>
        <tr>
            <th><label for="price">Giá</label></th>
            <th><input name="price" type="text" id="price"></th>
        </tr>
        <tr>
            <th><label for="quantity">Số lượng</label></th>
            <th><input name="amount" type="number" id="quantity"></th>
            <input  name="to_date" type="date">
        </tr>
        <tr>
            <th><label for="description">Mô tả</label></th>
            <th><textarea name="description" id="description" cols="30" rows="10"></textarea></th>
        </tr>
    </table>

    <button type="submit">Cập nhập</button>
    <button type="button"><a href="index.php?page=products">Thoát</a></button>
</form>

