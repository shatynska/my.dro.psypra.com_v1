// import useRoute from '@/Hooks/useRoute';
// import { Head } from '@inertiajs/react';
// import React from 'react';
// import AppLayout from '@/Layouts/AppLayout';
// import Header from '@/Components/Header';
// import Container from '@/Components/Container';

// export default function Photos({ about }: { about: string }) {
//     const route = useRoute();
// return (
//         <>
//             <Head title='Фото' />
//             <Container withNoHorizontalPadding>
//                 <div className='overflow-hidden border bg-white sm:rounded-lg'>
//                     <div>
//                         <div className='bg-white p-4 sm:p-20'>

//                         </div>
//                     </div>
//                 </div>
//             </Container>
//         </>
//     );
// }

// About.layout = (page: React.ReactNode) => <AppLayout children={page} />;


import { Head } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';
import Container from '@/Components/Container';

export default function Photos() {
    return (
        <>
            <Head title='Фото' />
            <Container withNoHorizontalPadding>
                <div className='overflow-hidden border bg-white sm:rounded-lg'>
                    <div>
                        <div className='bg-white p-4 sm:p-20'>

                        </div>
                    </div>
                </div>
            </Container>
        </>
    );
}

Photos.layout = (page: any) => <AppLayout children={page} />;
