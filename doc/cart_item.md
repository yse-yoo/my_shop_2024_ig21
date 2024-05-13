```mermaid
flowchart TD

subgraph Cart
index[商品一覧]
cart[カート一覧]
add{登録}
complete[完了画面]

index--->|カートに入れる|cart-->input
cart-.->add-.->complete

end
```