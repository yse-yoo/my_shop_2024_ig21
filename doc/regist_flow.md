```mermaid
flowchart TD

subgraph ユーザ登録
index[トップ]
input[入力画面]
confirm[確認画面]
add{登録}
complete[完了画面]

index-.->input-->confirm-->input
confirm-.->add-.->complete

end
```