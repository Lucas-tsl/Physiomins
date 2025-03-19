{assign var="id_categorie_nouveau" value=42}
{assign var="product_categories" value=Product::getProductCategories($product->id)}

{if in_array($id_categorie_nouveau, $product_categories)}
    <div class="new-badge fixed-badge-list">NOUVEAU</div> <!-- Badge nouveau -->
{/if}

{assign var="id_categorie_anti_gaspillage" value=33}

{if in_array($id_categorie_anti_gaspillage, $product_categories)}
    <div class="anti-gaspillage-badge fixed-badge-list">ANTI-GASPILLAGE</div> <!-- Badge anti-gaspillage -->
{/if}
