<p>
 {{ ($produk->harga) }} <br>
 Stok {{ $produk->stok }} |
 Berat {{ $produk->berat }} gr |
 Seller: {{ $produk->seller->username }} |
 Tanggal Produk: {{ $produk->created_at->diffForHumans()}}
 </p>