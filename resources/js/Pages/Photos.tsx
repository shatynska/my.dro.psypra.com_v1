import { Head } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';
import Header from '@/Components/Header';
import Container from '@/Components/Container';

export default function Photos() {
    return (
        <>
            <Head title='Фото' />
            <Header value='Фото' />
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
