<div id='fileview_content'>
<h1>Új akta</h1><br />
<table id='fileview_table'>
    <tr>
        <td><b>Akta sorszáma</b></td>
        <td><input type='text' id='inputFileName'></td>
    </tr>
    <tr>
        <td><b>Megnevezés</b></td>
        <td><input type='text' id='inputTitle'></td>
    </tr>
    <tr>
        <td colspan='2' style='text-align:center;'><b>Tartalom</b></td>
    </tr>
    <tr>
        <td colspan='2'>
            <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea><br />
            <script>CKEDITOR.replace('editor1');CKEDITOR.config.width = '100%';</script>
        </td>
    </tr>
    <tr>
        <td colspan='2'><a class='button-primary submit-new-file'>Létrehozás</a><span id='newfileInfo' style='margin-left: 10px;'>&nbsp</span></td>
    </tr>
</table>
</div>
<script src='js/new_file.js'></script>
