import { Head } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';
import Container from '@/Components/Container';

export default function Home() {
    return (
        <>
            <Head title='Головне' />
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

Home.layout = (page: any) => <AppLayout children={page} />;
