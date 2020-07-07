<?php

$tasks['request']['tasks']['add']=array();

foreach($leads_id as $id) {
    array_push($tasks['request']['tasks']['add'], array(
            'element_id'=>$id, #ID сделки
            'element_type'=>2, #Показываем, что это - сделка, а не контакт
            'task_type'=>1, #Тип задачи - звонок
            'text'=>'Сделка без задачи',
            'complete_till'=>strtotime('31-08-2017') #Дата до которой необходимо завершить задачу.
        )
    );

}

?>