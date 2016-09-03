<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'orm']) }}">ORM</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'extensions']) }}">Extensions</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'migrations']) }}">Migrations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'acl']) }}">ACL</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'fluent']) }}">Fluent</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'scout']) }}">Scout</a></li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
    <ul class="dropdown-menu" role="menu">
        <h6 class="dropdown-header">Join us on</h6>
        <a class="dropdown-item" target="_blank" href="https://github.com/laravel-doctrine">GitHub</a>
        <a class="dropdown-item" target="_blank" href="http://slack.laraveldoctrine.org">Slack</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Community packages</h6>
        <a class="dropdown-item" target="_blank" href="https://github.com/dave-redfern/laravel-doctrine-behaviours">Laravel Doctrine Behaviours</a>
        <a class="dropdown-item" target="_blank" href="https://github.com/bharley/laraveldoctrine-hashids">Hashids</a>
        <a class="dropdown-item" target="_blank" href="https://github.com/maxbrokman/SafeQueue">SafeQueue</a>
    </ul>
</li>
