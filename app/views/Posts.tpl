{foreach $posts as $post}
    <div class="card mb-3">
        <div class="card-header">
            {$post.title}
        </div>
        <div class="card-body">
            {$post.content}
        </div>
    </div>
{/foreach}

{if $pages > 1}
<div class="d_flex align-items-center justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item {if $current_page - 1 < 1}disabled{/if}">
                <a class="page-link"  href="/page/{$current_page - 1}">Back</a>
            </li>
            {for $i = 1; $i <= $pages; $i++}
                <li class="page-item {if $i == $current_page}disabled{/if}">
                    <a class="page-link"  href="/page/{$i}">{$i}</a>
                </li>
            {/for}
            <li class="page-item {if $current_page + 1 > $pages}disabled{/if}">
                <a class="page-link"  href="/page/{$current_page + 1}">Next</a>
            </li>
        </ul>
    </nav>
</div>
{/if}
