module.exports = {
    theme: {
        container: {
            padding: '1.2rem',
            screens: {
                sm: "100%",
                md: "100%",
                lg: "1280px",
                xl: "1280px"
             }
        },
        extend: {
            spacing: {
                px: '1px',
                '0': '0',
                '1': '0.25rem',
                '2': '0.5rem',
                '2-1': '0.6rem',
                '3': '0.75rem',
                '4': '1rem',
                '5': '1.25rem',
                '6': '1.5rem',
                '8': '2rem',
                '10': '2.5rem', 
                '12': '3rem',
                '13': '3.4rem',
                '14': '3.6rem',
                '15': '3.8rem',
                '16': '4rem',
                '17': '4.4rem',
                '20': '5rem',
                '22': '5.5rem',
                '24': '6rem',
                '26': '7rem',
                '27': '7.8rem',
                '32': '8rem',
                '33': '9.4rem',
                '34': '9.6rem',
                '35': '9.8rem',
                '40': '10rem',
                '41': '11rem',
                '42': '11.2rem', 
                '44': '11.4rem',
                '45': '11.5rem',
                '46': '11.563rem',
                '48': '12rem',
                '50': '13rem',
                '52': '13.2rem',
                '53': '13.4rem',
                '54': '13.6rem',
                '55': '13.8rem',
                '56': '14rem',
                '57': '15rem',
                '58': '16rem',
                '59': '17rem',
                '60': '18rem',
                '61': '19rem',
                '62': '20rem',
                '63': '21rem', 
                '63-1': '346.623px', 
                '64': '22rem',
                '64': '23rem',
            },
            colors: {
                link: {
                    'default': '#152268',
                    'hover': '#152268',
                },
                transparent: 'transparent',
                black: '#000',
                dark: '#211915',
                title:'#595A5C',
                white: '#fff',
                url:'#152268',
                line: "#b3b2b2", 
                success:"#0f834d",
                info:"#3d9cd2",
                error:"#e2401c",
                primary: { 
                    500: '#FF4300', 
                },
                secondary: { 
                    500: '#00b4d5',  
                }
            }, 
            fontSize: {
                xxs: '0.67rem',
                xs: '0.87rem',
                sm: '0.93rem',
                base: '1rem',
                lg: '1.12rem',
                xl: '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.87rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
                 //product cart
                 'dct': '19px',
                 'cyber': '23px' 
            },
            lineHeight: {
                tighter: '1.125',
            }, 
            maxWidth: {
                xs: '20rem',
                sm: '24rem',
                md: '28rem',
                lg: '32rem',
                xl: '36rem',
                '2xl': '42rem',
                '3xl': '48rem',
                '4xl': '56rem',
                '5xl': '64rem',
                '6xl': '1302px',
                'modal': '66rem',
                'container': '84.25rem',
                'front': '1366px',
                full: '100%',
            },
            fontFamily: { 
                roboto: [
                    '"Roboto"',
                    'sans-serif'
                ],
                pigeon: 'pigeon' 
            }
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            maxsm: {'max': '640px'},
            maxmd: { 'max': '768px'},
            maxlg: {'max': '1023px'},
            maxl: {'max': '1280px'}
        }
        
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
