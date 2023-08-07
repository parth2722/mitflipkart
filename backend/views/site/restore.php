<?php
            foreach ($softDeletedRecords as $record) {
            // Display record details
        
            // Add a restore button
            echo \yii\helpers\Html::a('Restore', ['record', 'id' => $record->id], [
                'class' => 'btn btn-success',
                'data' => [
                    'confirm' => 'Are you sure you want to restore this record?',
                    'method' => 'post',
                ],
            ]);
        }
        

       ?>