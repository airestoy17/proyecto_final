<?php
function generar_buscar($SQL){
    print('
    <div class="col-lg-4">
    <input type="search" class="form-control ds-input mb-4 mt-4" id="search-value" name="search-value" placeholder="Buscar..." aria-label="Buscar a..." autocomplete="off" data-docs-version="4.6" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
    </div>
    <div class="col-lg-4">
    <input list="fields" name="search-field" id="search-field" class="form-control ds-input mb-4 mt-4" placeholder="Seleccione atributo..." >
    </div>
<input type="submit" hidden />
    <datalist id="fields">'
    );
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    while ($finfo = mysqli_fetch_field($Result)) {
        print("<option value='" . $finfo->name . "'>");
    }

    print('</datalist></div>');

}
?>