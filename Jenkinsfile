pipeline {
     agent any
        stages{
            stage("Place") {
                steps {
                    sh "sudo rm -r /var/www/html/wordpress/wp-content/themes/pixicodesblogs"
                    sh "sudo mkdir /var/www/html/wordpress/wp-content/themes/pixicodesblogs"
                    sh "sudo cp -r ${WORKSPACE} /var/www/html/wordpress/wp-content/themes/pixicodesblogs"
                }
            }
        }
    }
