<label>Status: <span class="git_area_path"></span></label>
<header>
	<button onclick="codiad.CodeGit.showDialog('overview', codiad.CodeGit.location); return false;">Overview</button>
	<button onclick="codiad.CodeGit.showCommitDialog(); return false;">Commit</button>
	<!--<button onclick="codiad.CodeGit.showDialog('branches', codiad.CodeGit.location); return false;">Branches</button>-->
	<button onclick="codiad.CodeGit.showDialog('remote', codiad.CodeGit.location); return false;">Remotes</button>
	<button onclick="codiad.CodeGit.showDialog('log', codiad.CodeGit.location); return false;">Log</button>
	<button onclick="codiad.CodeGit.showDialog('push', codiad.CodeGit.location); return false;">Pull/Push</button>
	<div id="git_branch">
		<span>Branch: </span><span class="branch"></span>
	</div>
</header>

<?php
switch ($_GET['action']) {
	case 'commit':
		include('templates/major/commit.html');
		break;
	case 'log':
		include('templates/major/log.html');
		break;
	case 'push':
		include('templates/major/push.html');
		break;
	case 'remote':
		include('templates/major/remote.html');
		break;
	default:
		include('templates/major/overview.html');
		break;
}
?>

<footer>
	<button onclick="codiad.modal.unload(); return false;">Close</button>
	<button onclick="codiad.CodeGit.status(); return false;">Reload</button>
	<button onclick="codiad.CodeGit.showDialog('userConfig', codiad.CodeGit.location); return false;">User config</button>
</footer>
