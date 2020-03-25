<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */
    'overview'  => 'Visión general',
    'addnew'    => 'Agregar nuevo',
    'backups'   => 'Copias de seguridad',
    'upload'    => 'Subir',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    */
    'title'     => 'Editor .env',

    /*
    |--------------------------------------------------------------------------
    | View overview
    |--------------------------------------------------------------------------
    */
    'overview_title'                => 'Su archivo .env actual',
    'overview_text'                 => 'Aquí puede ver el contenido de su actual .env activo. Haga clic en <strong> cargar </strong> para mostrar el contenido.',
    'overview_button'               => 'Carga',
    'overview_table_key'            => 'Clave',
    'overview_table_value'          => 'Valor',
    'overview_table_options'        => 'Opciones',
    'overview_table_popover_edit'   => 'Editar entrada',
    'overview_table_popover_delete' => 'Borrar entrada',
    'overview_delete_modal_text'    => '¿Realmente quieres eliminar esta entrada?',
    'overview_delete_modal_yes'     => 'Sí, eliminar entrada',
    'overview_delete_modal_no'      => 'No, salir',
    'overview_edit_modal_title'     => 'Editar entrada',
    'overview_edit_modal_save'      => 'Guardar',
    'overview_edit_modal_quit'      => 'Abortar',
    'overview_edit_modal_value'     => 'Nuevo valor',
    'overview_edit_modal_key'       => 'Clave',

    /*
    |--------------------------------------------------------------------------
    | View add new
    |--------------------------------------------------------------------------
    */
    'addnew_title'      => 'Adicionar nuevo par clave-valor',
    'addnew_text'       => 'Aquí puede agregar un nuevo par clave-valor a su <strong> actual </strong> archivo .env. <br> Para estar seguro, cree una copia de seguridad antes en la pestaña de copia de seguridad.',
    'addnew_label_key'  => 'Clave',
    'addnew_label_value'=> 'Valor',
    'addnew_button_add' => 'Adicionar',

    /*
    |--------------------------------------------------------------------------
    | View backup
    |--------------------------------------------------------------------------
    */
    'backup_title_one'              => 'Save your current .env-file',
    'backup_create'                 => 'Create Backup',
    'backup_download'               => 'Download Current .env',
    'backup_title_two'              => 'Your available backups',
    'backup_restore_text'           => 'Here you can restore one of your available backups.',
    'backup_restore_warning'        => 'This overwrites your active .env! Be sure to backup your currently active .env-file!',
    'backup_no_backups'             => 'You have no backups available.',
    'backup_table_nr'               => 'Nr.',
    'backup_table_date'             => 'Date',
    'backup_table_options'          => 'Options',
    'backup_table_options_show'     => 'Show content of backup',
    'backup_table_options_restore'  => 'Restore this version',
    'backup_table_options_download' => 'Download this version',
    'backup_table_options_delete'   => 'Delete this version',
    'backup_modal_title'            => 'Content of backup',
    'backup_modal_key'              => 'Key',
    'backup_modal_value'            => 'Value',
    'backup_modal_close'            => 'Close',
    'backup_modal_restore'          => 'Restore',
    'backup_modal_delete'           => 'Delete',

    /*
    |--------------------------------------------------------------------------
    | View upload
    |--------------------------------------------------------------------------
    */
    'upload_title'  => 'Subir una copia de seguridad',
    'upload_text'   => 'Aquí puede cargar una copia de seguridad desde su computadora.',
    'upload_warning'=> '<strong> Advertencia: </strong> esto anulará su archivo .env actualmente activo. Asegúrese de crear una copia de seguridad antes de cargarla.',
    'upload_label'  => 'Elige un archivo',
    'upload_button' => 'Subir',

    /*
    |--------------------------------------------------------------------------
    | Messages from View
    |--------------------------------------------------------------------------
    */
    'new_entry_added'   => '¡Se agregó con éxito un nuevo par clave-valor a su .env!',
    'entry_edited'      => '¡El par clave-valor se editó correctamente!',
    'entry_deleted'     => '¡El par clave-valor se eliminó correctamente!',
    'delete_entry'      => 'Eliminar una entrada',
    'backup_created'    => 'Nueva copia de seguridad fue creada con éxito!',
    'backup_restored'   => '¡La copia de seguridad se restauró correctamente!',

    /*
    |--------------------------------------------------------------------------
    | Messages from Controller
    |--------------------------------------------------------------------------
    */
    'controller_backup_deleted' => '¡La copia de seguridad se eliminó correctamente!',
    'controller_backup_created' => '¡La copia de seguridad se creó con éxito!'
];
