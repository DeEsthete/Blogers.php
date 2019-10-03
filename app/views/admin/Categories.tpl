{include file="admin/blocks/head.tpl"}

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/categories/create" class="btn btn-success">Create</a>
    </div>
    {foreach $categories as $category}
        <div>
            <div class="card card-body mb-3 d-flex flex-row align-content-start justify-content-start">
                <div>
                    <h3>{$category.id} - {$category.name}</h3>
                </div>
                <div class="btn-group btn-group-sm ml-auto mb-auto">
                    <a href="/admin/categories/update/{$category.id}" class="btn btn-secondary">Update</a>
                    <a href="/admin/categories/delete/{$category.id}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    {/foreach}
</div>

{include file="global/footer.tpl"}