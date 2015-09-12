<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'orm']) }}">ORM</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'extensions']) }}">Extensions</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'migrations']) }}">Migrations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'acl']) }}">ACL</a></li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
    <ul class="dropdown-menu" role="menu">
        <a class="dropdown-item" target="_blank" href="https://github.com/laravel-doctrine">GitHub</a>
        <a class="dropdown-item" target="_blank" href="http://slack.laraveldoctrine.org">Slack</a>
    </ul>
</li>
