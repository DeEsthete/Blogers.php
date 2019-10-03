{include file="admin/blocks/head.tpl"}

<div class="container">
    <form action="/admin/categories/{$action}" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{$category.name}" required>
        </div>

        <input type="text" hidden name="id" value="{$category.id}">
        <button class="btn btn-primary">Apply</button>
    </form>
</div>

{include file="global/footer.tpl"}