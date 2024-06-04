<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9772253e4fb3e8df6535cdfe9db2ed40
{
    public static $classMap = array (
        'APP\\plugins\\generic\\pidManager\\Classes\\Helpers\\PID\\AbstractPid' => __DIR__ . '/../..' . '/../Classes/Helpers/PID/AbstractPid.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Helpers\\PID\\Doi' => __DIR__ . '/../..' . '/../Classes/Helpers/PID/Doi.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnArticleDetails' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnArticleDetails.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnConstants' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnConstants.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnDao' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnDao.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnDataModel' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnDataModel.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnForm' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnForm.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnPublicationTab' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnPublicationTab.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnSchema' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnSchema.php',
        'APP\\plugins\\generic\\pidManager\\Classes\\Igsn\\IgsnSubmissionWizard' => __DIR__ . '/../..' . '/../Classes/Igsn/IgsnSubmissionWizard.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9772253e4fb3e8df6535cdfe9db2ed40::$classMap;

        }, null, ClassLoader::class);
    }
}
