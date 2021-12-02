<?php

//namespace app\models;
namespace humhub\modules\stepstone_announcements\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use humhub\modules\stepstone_announcements\models\SsAnnouncements;

class AnnouncementsSearch extends SsAnnouncements
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['announcment_title'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SsAnnouncements::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->andFilterWhere ( [ 'OR' ,
                    [ 'like' , 'announcment_title' , $this->announcment_title ],
                    [ 'like' , 'announcment' , $this->announcment_title ],
                ] );        
        
                        
        return $dataProvider;
    }
}
