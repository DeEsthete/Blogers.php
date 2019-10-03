{include file="global/Head.tpl"}
{include file="admin/blocks/Navbar.tpl"}

<div class="container">
    {foreach $g.flashes as $flash}
        <div class="alert alert-{$flash.type} mb-3">
            {$flash.message}
        </div>
    {/foreach}
</div>