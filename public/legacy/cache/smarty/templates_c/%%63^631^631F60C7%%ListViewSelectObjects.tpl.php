<?php /* Smarty version 2.6.33, created on 2024-10-14 23:48:16
         compiled from themes%5Csuite8%5Cinclude/ListView/ListViewSelectObjects.tpl */ ?>
<div class="selectedRecords label hidden"><?php echo $this->_tpl_vars['APP']['LBL_LISTVIEW_SELECTED_OBJECTS']; ?>
</div><div class="selectedRecords value hidden"><?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
' />

<script>
<?php echo '
    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });
'; ?>

</script>