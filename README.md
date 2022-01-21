# PHP課題

## 概要（どんなものか，どうやって使うか，など）
#### 集計&結合の実装<br>
#### ARアプリを使用し遠くにあるものを探すアプリケーション用DB<br>
#### ログイン機能・チェック機能の追加<br>

## 苦戦した点，もう少し実装したかった点
#### これから現在地・目的地・経由地等の必要要素を加えていきます<br>
#### ログイン機能によるID振り分け・確認済みチェック機能の追加等<br>

## 感想など（任意）
#### まずは9地点の情報と使用した共有具を設定し9項目のパラーメーターを条件によって変更する機能を追加する、その変更されたキーに紐づけた矢印マークをARアプリを使用した際に表示させるアプリ作成が最初の目標。<br>

共有具が位置する場所への案内アプリ

①探している共有具を選択
②今いる位置から最も近いARマーカーを読取る
③工場名・使用設備・使用者の情報と共に方角を表示
④迷う都度ARマーカーを読取り指示された方角へ歩く
⑤共有具使用時に工場名・使用設備・使用者を入力

処理内容
工場・生産設備・人・共有具・位置の情報をDB化
ユーザーは共有具使用時に生産設備・人・共有具の入力
ユーザーの共有具使用時の情報入力日時を記録
工場を細かく区分けし要所にARマーカーを設置
最新日時の工場・生産設備の2情報から方角の設定
ARマーカーを読取ることで視覚的に矢印で示す


入力項目
使用者⇒ID
工場名⇒場所1
仕様エリア⇒場所2
使用設備⇒事前登録プルダウン
日時⇒DATETIME

表示内容（仮）
A～の９マスの何処にあるか
その方角の矢印を記載
