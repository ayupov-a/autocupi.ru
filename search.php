<?php
require_once __DIR__ . '/boot.php';

$a = null;
function addWhere($where, $add, $and = true) {
    if ($where) {
        if ($and) $where .= " AND $add";
        else $where .= " OR $add";
    }
    else $where = $add;
    return $where;
}
if (!empty($_POST)) {
    $where = "";
    if ($_POST["power"] != '-1') {
        $power_to = (int)$_POST['power'] + 100;
        $where = addWhere($where, "power >= ".(int)$_POST["power"])."";
        $where = addWhere($where, "power <= ". $power_to ."");
    }
    if ($_POST["price-from"]) $where = addWhere($where, "price >= '".htmlspecialchars($_POST["price-from"]))."'";
    if ($_POST["price-to"]) $where = addWhere($where, "price <= '".htmlspecialchars($_POST["price-to"]))."'";
    if ($_POST["mile-from"]) $where = addWhere($where, "mileage >= '".htmlspecialchars($_POST["mile-from"]))."'";
    if ($_POST["mile-to"]) $where = addWhere($where, "mileage <= '".htmlspecialchars($_POST["mile-to"]))."'";
    if ($_POST["brand"]) $where = addWhere($where, "brand = '".$_POST['brand']."'");
    if ($_POST["model"]) $where = addWhere($where, "model = '".$_POST['model']."'");
    if ($_POST["color"] != '-1') $where = addWhere($where, "color = '".$_POST['color']."'");
    if ($_POST["engine"] != '-1') $where = addWhere($where, "engine = ".$_POST['engine']."");
    if ($_POST["body"] != '-1') $where = addWhere($where, "body = ".$_POST['body']."");
    $sql = "SELECT id FROM catalog";
    if ($where) $sql .= " WHERE $where";
    $a = pdo()->query($sql);
}

if ($sql) {
    if (!($a->rowCount())) {
        flash("По вашему запросу ничего не найдено");
    }
    header('Location: catalog.php');
}

