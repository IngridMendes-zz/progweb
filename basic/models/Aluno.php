<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'id_curso', 'ano_ingresso','nome', 'sexo'], 'required', 'message'=>'Este campo é obrigatório'],
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer', 'message'=>'Este campo deve ser um inteiro'],
            [['nome'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 1],
            [['matricula'], 'string', 'length' => 8, 'message'=>'Matricula deve conter 8 caracteres.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matrícula',
            'nome' => 'Nome Completo',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de Graduação',
            'ano_ingresso' => 'Ano de Ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);      
    }

    public function afterFind(){

        $this->id_curso=Curso::findOne($this->id_curso)->nome;

        $this->nome = ucwords(strtolower($this->nome));
        
        if($this->sexo == 'M'){
            $this->sexo = 'Masculino';
        }else{
            $this->sexo = 'Feminino';
        }

    }
}
