export function socials() {

    const githubs = document.querySelectorAll('.github')
    if(githubs != null) {
        githubs.forEach(github => {
            const name = github.classList[1]
            let link
            switch (name) {
                case 'isabelle':
                    link='https://github.com/isab95'
                    break

                case 'dylan':
                    link='https://github.com/HappyFeys'
                    break

                case 'arnaud':
                    link = 'https://github.com/javadaller'
                    break
                
                default:
                    break
            }

            github.addEventListener('click', () => {
                open(link,'_blank')
            })
        });
    }

    const linkedins = document.querySelectorAll('.linkedin')
    if(linkedins != null) {
        linkedins.forEach(linkedin => {
            const name = linkedin.classList[1]
            let link
            switch (name) {
                case 'isabelle':
                    link='https://www.linkedin.com/in/isabelle-no%C3%ABl/'
                    break

                case 'dylan':
                    link='https://www.linkedin.com/in/dylan-feys/'
                    break

                case 'arnaud':
                    link = 'https://www.linkedin.com/in/arnaud-van-acker/'
                    break
                
                default:
                    break
            }

            linkedin.addEventListener('click', () => {
                open(link,'_blank')
            })
        });
    }

}