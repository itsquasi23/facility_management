<section class="my-container p-1 my-1">
    <h2 class="text-2xl font-medium">Bộ lọc thiết bị</h2>
    <label>Tên thiết bị:
        <input id="filter-ten-thiet-bi" placeholder="VD: Bàn ghế, Dụng cụ,..." type="text" />
    </label>

    <label>Hãng sản xuất:
        <input id="filter-hang-san-xuat" placeholder="VD: Dell, HP,..." type="text" />
    </label>

    <label>Tình trạng:
        <select id="filter-tinh-trang">
            <option value="">-- Tất cả --</option>
            <?php foreach ($tinhtrangOptions as $opt): ?>
                <option value="<?= htmlspecialchars($opt) ?>">
                    <?= htmlspecialchars($opt) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
</section>

<section class="my-container p-1 my-1">
    <h2 class="text-2xl font-medium">Bộ lọc vị trí</h2>
    <label>Tên phòng:
        <input id="filter-ten-phong" type="text" value="<?= htmlspecialchars($tenPhongURL) ?>"
            placeholder="VD: 10 Tin, STEM,..." />
    </label>

    <label>Mã phòng:
        <input id="filter-ma-phong" type="text" value="<?= htmlspecialchars($maPhongURL) ?>"
            placeholder="VD: C301, D102,..." />
    </label>

    <label>Dãy nhà:
        <select id="filter-day-nha">
            <option value="">-- Tất cả --</option>
            <?php foreach ($dayOptions as $opt): ?>
                <option value="<?= htmlspecialchars($opt) ?>" <?= $opt == $dayNhaURL ? 'selected' : '' ?>>
                    <?= htmlspecialchars($opt) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Tầng:
        <select id="filter-tang">
            <option value="">-- Tất cả --</option>
            <?php foreach ($tangOptions as $opt): ?>
                <option value="<?= htmlspecialchars($opt) ?>" <?= $opt == $tangURL ? 'selected' : '' ?>>
                    <?= htmlspecialchars($opt) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
</section>

<section class="my-container p-1 my-1">
    <h2 class="text-2xl font-medium">Bộ lọc nhân viên</h2>
    <label>Tên nhân viên:
        <input id="filter-nhan-vien" type="text" value="<?= htmlspecialchars($nhanVienURL) ?>"
            placeholder="VD: Nguyễn Văn A,..." />
    </label>
</section>